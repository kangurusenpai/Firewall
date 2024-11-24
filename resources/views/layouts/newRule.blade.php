@extends('dashboard')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="border border-secondary rounded p-3 bg-light  ">
            <label for="classroom"></label>
            <select name="classroom" class="mb-4">
                <option value="">-- Select a Classroom --</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                @endforeach
            </select><br>
            <select name="time" class="mb-4">
                <option value="">-- Select a length for rule --</option>
                <option value="">45 minutes</option>
                <option value="">1.5 hour</option>
                <option value="">2 hours</option>
                <option value="">2 hours 15 minutes</option>
                <option value="">3 hours</option>
            </select><br>
            <label for="timePicker" class="form-label">Time for the rule to start</label>
            <input type="time" class="form-control" name="start" id="timePicker" min="07:00" max="20:00"required>
            <small class="form-text text-muted">
                Please choose a time between 7:00 AM and 8:00 PM
            </small>
            <div class="form-check">
                <label for="disableEveryting">
                    <input type="checkbox" name="disableEveryting">
                    Disable everything
                </label><br>
                <label for="moodle">
                    <input type="checkbox" name="moodle">
                    Enable only Moodle
                </label><br>
                <label for="ai">
                    <input type="checkbox" name="ai">
                    Disable Ai(GPT,Gemini,Copilot)
                </label><br>
                <label for="sites">
                    <input type="checkbox" name="sites">
                    Disable everything expect these websites:
                </label>
            </div>

            <textarea class="form-control" id="otherSites" rows="4" placeholder="Write urls here..."></textarea>
        </div>
    </form>
@endsection
