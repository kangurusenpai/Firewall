<div class="container mt-5 col-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $classroom->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $classroom->name }}</h6>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Options
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                    <li><a class="dropdown-item" href="#">Action 2</a></li>
                    <li><a class="dropdown-item" href="#">Action 3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
