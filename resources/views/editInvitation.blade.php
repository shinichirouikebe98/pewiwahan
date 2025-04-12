@extends('layouts.app')

@section('content')
<div class="form-container">
  <h1 class="form-title">Edit Undangan Metatah</h1>

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif

  <form method="POST" action="{{ route('invitation.update', ['invitation' => $invitation->id]) }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
      <label for="name">Nama</label>
      <input id="name" type="text" name="name" required autofocus value="{{ $invitation->name }}">
      @error('name')
        <span class="error-message">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group">
      <label for="phone">Nomor Telepon</label>
      <input id="phone" type="text" name="phone" required value="{{ $invitation->phone }}">
      @error('phone')
        <span class="error-message">{{ $message }}</span>
      @enderror
    </div>

    <button type="submit" class="submit-button">Submit</button>
  </form>
</div>
@endsection
