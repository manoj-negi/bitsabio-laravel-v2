<?php

namespace App\Http\Controllers;
use App\Models\InterviewQuestion;

use Illuminate\Http\Request;

class InterviewQuestionController extends Controller
{
        public function index()
    {
        $interviewQuestions = InterviewQuestion::where('status', true)
            ->orderBy('priority')
            ->get();

        return view('interview-questions', compact('interviewQuestions'));
    }
        public function show($slug)
    {
        $interviewQuestion = InterviewQuestion::where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();

        return view('interview-detail', compact('interviewQuestion'));
    }

}
