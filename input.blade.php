<div>
    <div class="form-group">
        <label for="">{{$label}}</label>
        <br />
        <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" aria-describedby="" value="{{old('$name')}}" />
        
        @error('$name')
        <div class="text-danger">{{$message}}</div>
        @enderror
       
    </div>
</div>