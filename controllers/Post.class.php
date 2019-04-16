<?php class Post extends Controller {
    public function index() {
        // Membaca model
        $postModel = $this->loadModel('PostModel');

        // Mendapatkan data dari model
        $posts = $postModel->getAll();

        // Membaca view
        $this->loadView('posts', ['posts' => $posts]);
    }
}