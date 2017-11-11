<?php

businessarea Business\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Business\Requests\StoreCompany as StoreCompanyRequest;

use Auth;
use Gate;

class CompanyController extends Controller
{

  public function store(StoreCompanyRequest $request)     //Http post method
{
  $data = $request->only('name', 'reg_nr','var_nr','type','category');
  //$data['slug'] = str_slug($data['title']);
  //$data['user_id'] = Auth::user()->id;
  $company_add = Company::create($data);
  return redirect()->route('company_index', ['id' => $company->reg_nr]);
  //return redirect()->route('edit_post', ['id' => $post->id]);
}



}
