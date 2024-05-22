<?php

namespace App\Http\Controllers\Frontend;

use App\Core\BlogInterface;
use App\Core\CareerInterface;
use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController
{
    private $careerInterface, $blogInterface;
    public function __construct(CareerInterface $careerInterface, BlogInterface $blogInterface)
    {
        $this->careerInterface = $careerInterface;
        $this->blogInterface = $blogInterface;
    }
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.aboutUs');
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function envImpactService()
    {
        return view('frontend.envImpactService');
    }

    public function envDueService()
    {
        return view('frontend.envDueService');
    }

    public function esmMonitService()
    {
        return view('frontend.esmMonitService');
    }

    public function susRepotService()
    {
        return view('frontend.susRepotService');
    }

    public function supChainService()
    {
        return view('frontend.supChainService');
    }

    public function careerList()
    {
        return view('frontend.careerList', [
            'allJobs' => $this->careerInterface->getAllJobs(),
        ]);
    }

    public function apply(Request $request)
    {
        $request->validate([
            'application_type' => 'required|in:' . config('core.INTERN') . ',' . config('core.PERMNT'),
            'first_name' => 'required',
            'last_name' => 'required',
            'form_Phone' => 'required',
            'form_Email' => 'required',
            'form_message' => 'required',
            'fileToUpload' => 'required',
        ]);
        $data = $request->only('application_type', 'first_name', 'last_name', 'form_Phone', 'form_Email', 'form_message', 'fileToUpload', 'job_post_id');
        $submitApplication = $this->careerInterface->submitApplication($data);

        if ($submitApplication) {
            return back()->with('msg', 'Your application for internship has been submitted.');
        } else {
            return back()->withErrors(['error' => 'There was an error submitting your application. Please try again.']);
        }
    }

    public function solutions()
    {
        return view('frontend.solutions.solutions');
    }

    public function ecgData()
    {
        return view('frontend.solutions.ecgData');
    }

    public function envScreen()
    {
        return view('frontend.solutions.envScreen');
    }

    public function resetPlan()
    {
        return view('frontend.solutions.resetPlan');
    }

    public function blogs($slug = null)
    {
        if ($slug != null) {
            return view('frontend.resources.singleblog', [
                'blog' => $this->blogInterface->singleBlog($slug),
            ]); 
        }
        return view('frontend.resources.blogs', [
            'blogs' => $this->blogInterface->getAllBlogs()->paginate(5),
        ]);
    }

    public function caseStudy($slug = null) {
        if ($slug != null) {
            return view('frontend.resources.singlecasestudy', [
                'caseStudy' => CaseStudy::with('sections')->where('slug', $slug)->first()
            ]); 
        }
        return view('frontend.resources.casestudy', [
            'caseStudies' => CaseStudy::orderByDesc('id')->get()
        ]); 
    }

    public function news($slug = null)
    {
        if ($slug != null) {
            return view('frontend.resources.singlenews', [
                'news' => News::where('slug',$slug)->first(),
                'news_images' => News::select('image')->orderByDesc('id')->get(),

            ]); 
        }
        return view('frontend.resources.news', [
            'newss' => News::orderByDesc('id')->get(),
        ]);
    }

    
}
