<?php
namespace App;

// 1. To specify package’s class you are using
use Dimsav\Translatable\Translatable; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
   use SoftDeletes;
   use Translatable; // 2. To add translation methods

   // 3. To define which attributes needs to be translated
   public $translatedAttributes = ['title', 'description']; 
}