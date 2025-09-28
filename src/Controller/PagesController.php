<?php
declare(strict_types=1);
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

// Handles static pages (like home, about, etc.)
class PagesController extends AppController
{
    // Renders a static page based on the URL path
    public function display(string ...$path): ?Response
    {
        // If no path is given, redirect to home
        if (!$path) {
            return $this->redirect('/');
        }
        // Prevent directory traversal (security)
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }

        // Set page and subpage variables for the view
        $page = $subpage = null;
        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        // Try to render the requested template
        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            // Show error if template not found
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
}
