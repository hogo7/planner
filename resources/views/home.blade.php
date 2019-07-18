@extends('layouts.app')

@section('content')
 
<div class="card-deck mx-3 mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ازمون MBTI</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>شناخت  توانایی ها</li>
          <li>برسی انواع محیط کسب کار </li>
          <li>شناخت نقاط ضعف</li>
        </ul>
        <a href="/mbti/index" type="button" class="btn btn-lg btn-block btn-primary">ورود به تست</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">شتاخت علایق</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>شناخت علایق شخصی </li>
          <li>شناخت مهارت ها </li>
          <li>تعیین اولیت ها </li>
        </ul>
        <a href="tasks/index" type="button" class="btn btn-lg btn-block btn-primary">ورود به تست</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">اهداف و اسانسور های ان</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
          <li>تعیین مسیر زندگی</li>
          <li>روشن شدن نقطه موفقیت</li>
          <li>برنامه ریزی برای اهداف</li>
        </ul>
        <a href="/index" type="button" class="btn btn-lg btn-block btn-primary">ورود به تست</a>
      </div>
    </div>
</div>


<main class="container">
<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-light display-4 text-right">نتایج</h4>
      </div>
      <div class="card-body">
        در دست ساخت 
  <p class='lead'>mbti test</p>
E ={{ $data['E']}}
<br>
I ={{ $data['I']}}
<br>
S ={{ $data['S']}}
<br>
N ={{ $data['N']}}
<br>
P ={{ $data['P']}}
<br>
T ={{ $data['T']}}
<br>
J ={{ $data['J']}}
<br>
F ={{ $data['F']}}
<br>

نتیجه ={{ $data['result']}}
<br>

      </div>
    </div>
</main>

      

@endsection
