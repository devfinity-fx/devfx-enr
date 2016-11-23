@extends('app')
@section('content')
    {!! Form::open(['url' => 'enrollment/submit']) !!}
    <dl>
        <dt>{!! Form::label('IdentificationNo', 'ID #') !!} </dt>
        <dd>{!! Form::text('IdentificationNo)') !!} </dd>
        <dt>{!! Form::label('LastName', 'Last Name') !!} </dt>
        <dd>{!! Form::text('LastName') !!} </dd>
        <dt>{!! Form::label('FirstName', 'First Name') !!} </dt>
        <dd>{!! Form::text('FirstName') !!} </dd>
        <dt>{!! Form::label('MiddleName', 'Middle Name') !!} </dt>
        <dd>{!! Form::text('MiddleName') !!} </dd>
        <dt>{!! Form::label('Gender', 'Gender') !!} </dt>
        <dd>{!! Form::text('Gender') !!} </dd>
        <dt>{!! Form::label('DateOfBirth', 'Date of Birth') !!} </dt>
        <dd>{!! Form::text('DateOfBirth') !!} </dd>
        <dt>{!! Form::label('StreetAddress', 'Street Address') !!} </dt>
        <dd>{!! Form::text('StreetAddress') !!} </dd>
        <dt>{!! Form::label('Village', 'Village') !!} </dt>
        <dd>{!! Form::text('Village') !!} </dd>
        <dt>{!! Form::label('City', 'City') !!} </dt>
        <dd>{!! Form::text('City') !!} </dd>
        <dt>{!! Form::label('Province', 'Province') !!} </dt>
        <dd>{!! Form::text('Province') !!} </dd>
        <dt>{!! Form::label('Nationality', 'Nationality') !!} </dt>
        <dd>{!! Form::text('Nationality') !!} </dd>
        <dt>{!! Form::label('CivilStatus', 'Civil Status') !!} </dt>
        <dd>{!! Form::text('CivilStatus') !!} </dd>
        <dt>{!! Form::label('Religion', 'Religion') !!} </dt>
        <dd>{!! Form::text('Religion') !!} </dd>
        <dt>{!! Form::label('EmailAddress', 'Email Address') !!} </dt>
        <dd>{!! Form::text('EmailAddress') !!} </dd>
        <dt>{!! Form::label('ContactNo', 'Contact #') !!} </dt>
        <dd>{!! Form::text('ContactNo') !!} </dd>
        <dt>{!! Form::label('Username', 'Username') !!} </dt>
        <dd>{!! Form::text('Username') !!} </dd>
        <dt>{!! Form::label('Password', 'Password') !!} </dt>
        <dd>{!! Form::password('Password') !!} </dd>
        <dt>{!! Form::label('AccountLevel') !!} </dt>
        <dd>{!! Form::select('AccountLevel', ['S'=>'Student','T'=>'Teacher','A'=>'Accountant','R'=>'Registrar','Z'=>'Administrator','D'=>'Developer']) !!} </dd>
    </dl>
    {!! Form::submit('submit') !!}
    {!! Form::reset('reset') !!}
    {!! Form::close() !!}
@endsection()