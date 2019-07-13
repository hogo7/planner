@extends('layouts.app')

@section('content')
<main class="container">
<div class="card mb-4 shadow-lg">
      <div class="card-header">
        <h4 class="my-0 font-weight-light display-4 text-center">علاقه مهارت ضرورت</h4>
      </div>
       <form action="" method="post" class="form-gorup">



    <div class=" row card-body" id='t1'> 
      <div class="card-body text-center " id="div-l1">
        <p class="lead "> مدیریت افراد</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l1i' id='l1i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required >
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l1s'  id='l1s' class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l1e'  id='l1e' class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>
      </div>

      <div class="card-body text-center " id="div-l2">
        <p class="lead ">آشپزی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l2i' id='l2i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l2s' id='l2s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l2e'  id='l2e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>

    </div>
      

    <div class=" row card-body" id='t2' style="display:none;">

        <div class="card-body text-center " id="div-l3">
          <p class="lead ">سخنرانی</p>
          <label for="in">علاقه</label>        
          <input type="range" name='l3i' id='l3i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
          <p class='vali'></p>

          <label for="in">مهارت</label>
          <input type="range" name='l3s' id='l3s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
          <p class='vals'></p>

          <label for="in">ضرورت</label>
          <input type="range" name='l3e'  id='l3e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
          <p class='vale'></p>
        </div>

      <div class="card-body text-center " id="div-l4">
          <p class="lead ">فعالیت آزمایشگاهی</p>
          <label for="in">علاقه</label>        
          <input type="range" name='l4i' id='l4i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
          <p class='vali'></p>

          <label for="in">مهارت</label>
          <input type="range" name='l4s' id='l4s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
          <p class='vals'></p>

          <label for="in">ضرورت</label>
          <input type="range" name='l4e'  id='l4e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
          <p class='vale'></p>      
        </div>
        <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
          <p class='error'></p>
        </div>
        <div class="card-body text-center col-10 container">        
          <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
        </div>
    </div>

    <div class=" row card-body" id='t3' style="display:none;">
     <div class="card-body text-center " id="div-l5">
        <p class="lead ">تدریس به دیگران</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l5i' id='l5i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l5s' id='l5s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l5e'  id='l5e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

      
      </div>

      <div class="card-body text-center " id="div-l6">
        <p class="lead ">مطالعه  آزاد</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l6i' id='l6i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l6s' id='l6s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l6e'  id='l6e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

      
      </div>
      
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t4' style="display:none;">
      <div class="card-body text-center " id="div-l7">
        <p class="lead ">ساخت محصول جدید </p>
        <label for="in">علاقه</label>        
        <input type="range" name='l7i' id='l7i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l7s' id='l7s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l7e'  id='l7e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

        
      </div>

      <div class="card-body text-center " id="div-l8">
        <p class="lead ">تعمیر لوازم منزل</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l8i' id='l8i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l8s' id='l8s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l8e'  id='l8e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

        
      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t5' style="display:none;">
      <div class="card-body text-center " id="div-l9">
        <p class="lead ">فعالیت هنری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l9i' id='l9i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l9s' id='l9s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l9e'  id='l9e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

        
      </div>

      <div class="card-body text-center " id="div-l10">
        <p class="lead ">فعالیت ورزشی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l10i' id='l10i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l10s' id='l10s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l10e'  id='l10e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <!-- first 10 -->
    <div class=" row card-body" id='t6' style="display:none;">  
     <div class=" card-body text-center " id="div-l11">
        <p class="lead ">مشاوره امور زندگی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l11i' id='l11i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l11s' id='l11s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l11e'  id='l11e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

        </div>

      <div class="card-body text-center " id="div-l12">
        <p class="lead ">فعالیت های خیرخواهانه</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l12i' id='l12i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l12s' id='l12s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l12e'  id='l12e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>

    </div>
      

    <div class=" row card-body" id='t7' style="display:none;">
      <div class="card-body text-center " id="div-l13">
        <p class="lead ">تحقیقات علمی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l13i' id='l13i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l13s' id='l13s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l13e'  id='l13e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l14">
        <p class="lead ">فروش محصولات</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l14i' id='l14i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l14s' id='l14s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l14e'  id='l14e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
      
    </div>

    <div class=" row card-body" id='t8' style="display:none;">
      <div class="card-body text-center " id="div-l15">
        <p class="lead ">برنامه ریزی </p>
        <label for="in">علاقه</label>        
        <input type="range" name='l15i' id='l15i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l15s' id='l15s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l15e'  id='l15e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l16">
        <p class="lead ">بحث و مناظره</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l16i' id='l16i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l16s' id='l16s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l16e'  id='l16e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t9' style="display:none;">
      <div class="card-body text-center " id="div-l17">
        <p class="lead ">حسابداری </p>
        <label for="in">علاقه</label>        
        <input type="range" name='l17i' id='l17i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l17s' id='l17s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l17e'  id='l17e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l18">
        <p class="lead ">آموزش به کودکان</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l18i' id='l18i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l18s' id='l18s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l18e'  id='l18e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t10' style="display:none;">
     <div class="card-body text-center " id="div-l19">
        <p class="lead ">جستجو در اینترنت</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l19i' id='l19i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l19s' id='l19s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l19e'  id='l19e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l20">
        <p class="lead ">تولید محتوی </p>
        <label for="in">علاقه</label>        
        <input type="range" name='l20i' id='l20i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l20s' id='l20s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l20e'  id='l20e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

    
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t11' style="display:none;">  
     <div class=" card-body text-center " id="div-l21">
        <p class="lead ">نویسندگی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l21i' id='l21i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l21s' id='l21s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l21e'  id='l21e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


        </div>

      <div class="card-body text-center " id="div-l22">
        <p class="lead ">مجریگری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l22i' id='l22i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l22s' id='l22s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l22e'  id='l22e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>
      
    <div class=" row card-body" id='t12' style="display:none;">
      <div class="card-body text-center " id="div-l23">
        <p class="lead ">حل مسائل ریاضی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l23i' id='l23i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l23s' id='l23s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l23e'  id='l23e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l24">
        <p class="lead ">فعالیت های اجتماعی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l24i' id='l24i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l24s' id='l24s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l24e'  id='l24e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t13' style="display:none;">
      <div class="card-body text-center " id="div-l25">
        <p class="lead ">کمک به دیگران</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l25i' id='l25i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l25s' id='l25s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l25e'  id='l25e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l26">
        <p class="lead ">یادگیری زبانهای خارجه</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l26i' id='l26i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l26s' id='l26s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l26e'  id='l26e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t14' style="display:none;">
      <div class="card-body text-center " id="div-l27">
        <p class="lead ">برنامه نویسی کامپیوتر</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l27i' id='l27i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l27s' id='l27s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l27e'  id='l27e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l28">
        <p class="lead ">فعالیت های اقتصادی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l28i' id='l28i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l28s' id='l28s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l28e'  id='l28e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
        <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t15' style="display:none;">
     <div class="card-body text-center " id="div-l29">
        <p class="lead ">خرید و فروش کالا</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l29i' id='l29i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l29s' id='l29s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l29e'  id='l29e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

        <div class="card-body text-center " id="div-l30">
        <p class="lead ">مشاوره آموزشی و علمی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l20i' id='l30i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l30s' id='l30s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l30e'  id='l30e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

    
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t16' style="display:none;">  
      <div class=" card-body text-center " id="div-l31">
        <p class="lead ">ایده دادن </p>
        <label for="in">علاقه</label>        
        <input type="range" name='l31i' id='l31i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l31s' id='l31s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l31e'  id='l31e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


        </div>

      <div class="card-body text-center " id="div-l32">
        <p class="lead ">تحلیل و بررسی مسائل</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l32i' id='l32i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l32s' id='l32s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l32e'  id='l32e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>
      
    <div class=" row card-body" id='t17' style="display:none;">
      <div class="card-body text-center " id="div-l33">
        <p class="lead ">تحلیل سیستم کاری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l33i' id='l33i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l33s' id='l33s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l33e'  id='l33e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l34">
        <p class="lead ">مدیریت استراتژیک</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l34i' id='l34i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l34s' id='l34s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l34e'  id='l34e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t18' style="display:none;">
      <div class="card-body text-center " id="div-l35">
        <p class="lead ">انجام کارهای اجرایی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l35i' id='l35i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l35s' id='l35s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l35e'  id='l35e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l36">
        <p class="lead ">انجام کارهای اداری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l36i' id='l36i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l36s' id='l36s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l36e'  id='l36e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

    <div class=" row card-body" id='t29' style="display:none;">
      <div class="card-body text-center " id="div-l37">
        <p class="lead ">خیاطی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l37i' id='l37i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l37s' id='l37s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l37e'  id='l37e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l38">
        <p class="lead ">معماری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l38i' id='l38i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l38s' id='l38s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l38e'  id='l38e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>
      <div class="container bg-danger btn btn-outline btn-disable errbox" style="display:none;">
        <p class='error'></p>
      </div>
      <div class="card-body text-center col-10 container">        
        <button type="button"  class='next btn-block  btn-primary'>بعدی</button>
      </div>
    </div>

   <div class=" row card-body " id='t20' style="display:none;">
    <div class="card-body text-center " id="div-l39">
        <p class="lead ">سفر و گردشگری</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l39i' id='l39i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l39s' id='l39s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l39e'  id='l39e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>


      </div>

      <div class="card-body text-center " id="div-l40">
        <p class="lead ">رهبری و سازماندهی</p>
        <label for="in">علاقه</label>        
        <input type="range" name='l40i' id='l40i'  class="col-4 i" min="-1" max="10" step="1" value="-1" required>
        <p class='vali'></p>

        <label for="in">مهارت</label>
        <input type="range" name='l40s' id='l40s'  class="col-4 s" min="-1" max="10" step="1" value="-1" required>
        <p class='vals'></p>

        <label for="in">ضرورت</label>
        <input type="range" name='l40e'  id='l40e'  class="col-4 e" min="-1" max="10" step="1" value="-1" required>
        <p class='vale'></p>

        

    </div>
    <div class="card-body text-center col-6 container">
     <a href="/home">   <input type='submit' class='next btn-block  btn-primary ' value='ارسال'> </a>
      </div>
    </div>




    </div>
      

<!-- ///////////////////////////////////////////// -->

      













      </form>
        </div>


        </div>
    </main>  










@endsection

@section('js')

<script src="{{asset('./js/tasks.js')}}"></script>

@endsection