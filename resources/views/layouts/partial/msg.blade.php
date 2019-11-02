@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
                <button type="button" class="close" aria-hidden="true" onclick="this.parentElement.style.display='none'">
                    x
                </button>
                <span>
                    <b> Danger - </b> {{ $error }}</span>
        </div>
    @endforeach
@endif



@if (session('successMsg'))
<div class="alert alert-success">
    <button type="button" class="close" aria-hidden="true" onclick="this.parentElement.style.display='none'">
        x
    </button>
    <span>
      <b> Success- </b> {{ session('successMsg') }}</span>
</div>
@endif

@if (session('warning'))

        <div class="alert alert-warning">
                <button type="button" class="close" aria-hidden="true" onclick="this.parentElement.style.display='none'">
                    x
                </button>
                <span>
                    <b> Warning - </b> {{ session('warning') }}</span>
        </div>

@endif

