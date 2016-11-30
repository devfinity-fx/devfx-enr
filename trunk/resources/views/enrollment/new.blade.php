@extends('app')
@section('content')
    {!! Form::open(['url' => 'enrollment/submit']) !!}


            <form action="#"> 
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 {!! Form::text('IDNo', '', ['class' => 'mdl-textfield__input', 'id' => 'IDno']) !!}
                 {!! Form::label('IDNo', 'ID #', ['class' => 'mdl-textfield__label']) !!}
                 </div>
             </form>

             <form action="#"> 
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 {!! Form::text('LastName', '', ['class' => 'mdl-textfield__input', 'id' => 'IDno']) !!}
                 {!! Form::label('LastName', 'LastName', ['class' => 'mdl-textfield__label']) !!}
                 </div>
             </form>

             <form action="#"> 
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 {!! Form::text('FirstName', '', ['class' => 'mdl-textfield__input', 'id' => 'IDno']) !!}
                 {!! Form::label('FirstName', 'FirstName', ['class' => 'mdl-textfield__label']) !!}
                 </div>
             </form>             

             <form action="#"> 
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 {!! Form::text('MiddleName', '', ['class' => 'mdl-textfield__input', 'id' => 'IDno']) !!}
                 {!! Form::label('MiddleName', 'MiddleName', ['class' => 'mdl-textfield__label']) !!}
                 </div>
             </form>             

             <form action="#"> 
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 {!! Form::text('Gender', '', ['class' => 'mdl-textfield__input', 'id' => 'IDno']) !!}
                 {!! Form::label('Gender', 'Gender', ['class' => 'mdl-textfield__label']) !!}
                 </div>
             </form>

             <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
             </button>

            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                for="demo-menu-lower-left">
                  <li class="mdl-menu__item">Some Action</li>
                  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
                  <li disabled class="mdl-menu__item">Disabled Action</li>
                  <li class="mdl-menu__item">Yet Another Action</li>
            </ul>

             <br><br>
             {!! Form::label('Gender', 'Gender') !!}  
             {!! Form::select('Gender', ['-'=>'- Select -','M'=>'Male','F'=>'Female']) !!}  
             {!! Form::label('DateOfBirth', 'Date of Birth') !!}  
             {!! Form::text('DateOfBirth') !!}  
             {!! Form::label('StreetAddress', 'Street Address') !!}  
             {!! Form::text('StreetAddress') !!}  
             {!! Form::label('Village', 'Village') !!}  
             {!! Form::text('Village') !!}  
             {!! Form::label('City', 'City') !!}  
             {!! Form::text('City') !!}  
             {!! Form::label('Province', 'Province') !!}  
             {!! Form::text('Province', '', ['id'=>'shit']) !!}  
             {!! Form::label('Nationality', 'Nationality') !!}  
             {!! Form::text('Nationality') !!}  
             {!! Form::label('CivilStatus', 'Civil Status') !!}  
             {!! Form::select('CivilStatus', ['-'=>'- Select -','S'=>'Single','M'=>'Married']) !!}  
             {!! Form::label('Religion', 'Religion') !!}  
             {!! Form::text('Religion') !!}  
             {!! Form::label('EmailAddress', 'Email Address') !!}  
             {!! Form::text('EmailAddress') !!}  
             {!! Form::label('ContactNo', 'Contact #') !!}  
             {!! Form::text('ContactNo') !!}  
             {!! Form::label('Username', 'Username') !!}  
             {!! Form::text('Username') !!}  
             {!! Form::label('Password', 'Password') !!}  
             {!! Form::password('Password') !!}  
             {!! Form::label('AccountLevel') !!}  
             {!! Form::select('AccountLevel', ['-'=>'- Select -','S'=>'Student','T'=>'Teacher','A'=>'Accountant','R'=>'Registrar','Z'=>'Administrator','D'=>'Developer']) !!} 
            {!! Form::submit('submit') !!}
            {!! Form::reset('reset') !!}
            {!! Form::close() !!}
@endsection()