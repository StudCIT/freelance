@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
    <div class="text-white" id="password_change">
        <p class="col font-size-18 text-center">Заявка на реєстрацію</p>
        <form method="POST" action="{{ route('send_application') }}" class="col-6 offset-3 shadow-lg pass_change">
            @csrf
            <div class="col-12">
                <div class="form-group row">
                    <label for="name" class="col-form-label">Ім'я</label>
                    <input id="name" type="text" class="form-control bg-light-black text-white border-0" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ім'я">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="surname" class="col-form-label">Прізвище</label>
                    <input id="surname" type="text" class="form-control bg-light-black text-white border-0" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Прізвище">
                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="id_role " class="col-form-label">Роль</label>
                    <select id="id_role" class="form-control bg-light-black text-white border-0" name="id_role">
                        <option {{old('id_role') == 'Виконавець' ? 'selected' : ''}}>Виконавець</option>
                        <option {{old('id_role') == 'Замовник' ? 'selected' : ''}}>Замовник</option>
                    </select>
                </div>
                <div class="form-group row d-none" id="dept-block">
                    <label for="id_dept" class="col-form-label">Кафедра</label>
                    <select id="id_dept" class="form-control border-0 bg-light-black text-white" name="id_dept">
                        <option {{old('id_dept') == 'Не обрано' ? 'selected' : ''}} value="0">Не обрано</option>
                        @foreach($data as $item)
                            <option {{ old('id_dept') == $item->id_dept ? 'selected' : '' }} value="{{ $item->id_dept}} ">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-form-label">Електронна адреса</label>
                    <input id="email" type="email" class="form-control bg-light-black text-white @error('email') is-invalid @enderror border-0" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="comment" class="col-form-label">Додаткова інформація</label>
                    <textarea class="form-control text-white border-0 bg-light-black" name="comment" id="comment" rows="5"></textarea>
                </div>

                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn bg-green text-white mb-2 mt-2 badge-pill">
                        Відправити
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @include('site.footer')
@endsection
