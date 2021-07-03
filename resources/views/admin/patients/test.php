

<div class="form-group mb-3">
    <label for="">Program:</label>
    <select name="program_id" class="form-control @error('program_id) is-invalid @enderror">
        <option value="">Select Program</option>
        @foreach ($programs as $program)
        <option value="{{ $program->id }}" @if($program->id == old('program_id',$program->id)) selected @endif >{{ $program->name }}</option>
        @endforeach
    </select>
    @error('program_id')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div> 


