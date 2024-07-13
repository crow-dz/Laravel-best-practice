<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;
use App\Models\Tag;

class Job extends Model

{
  use HasFactory;

  protected $table = 'jobs_listing';
  //protected $fillable =['title','salary','employer_id'];
  protected $guarded = [];
  function employer(){
    return $this->belongsTo(Employer::class);
  }
  public function tags()
  {
      return $this->belongsToMany(Tag::class, 'job_tag', 'jobs_listing_id', 'tag_id');
  }
  
}
