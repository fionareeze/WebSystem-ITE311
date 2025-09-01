   <?php

   namespace App\Controllers;

   use CodeIgniter\Controller;

   class Home extends Controller
   {
       public function index()
       {
           return view('index');
       }

       public function about()
       {
           return view('about');
       }

       public function contact()
       {
           return view('contact');
       }
   }
   