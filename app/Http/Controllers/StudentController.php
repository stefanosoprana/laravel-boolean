<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

      return view('students.index');

    }

    public function show($slug) {

        $student = [];

        foreach (config('students') as $availableStudent) {
          if ($availableStudent['slug'] == $slug) {
            $student = $availableStudent;
          }
        }

        return view('students.show', compact('student'));
    }
}
