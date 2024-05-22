<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudySection extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'case_study_id'];
    public function caseStudy()
    {
        return $this->belongsTo(CaseStudy::class);
    }
}
