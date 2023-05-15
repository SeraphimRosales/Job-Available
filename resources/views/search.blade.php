
    <div class="container">
        <h1>Search Results</h1>
        <hr>
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Go!</button>
                </span>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-md-12">
                @if(isset($jobs))
                    @if(count($jobs) > 0)
                        @foreach($jobs as $job)
                            <div class="well">
                                <h3><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a></h3>
                                <p>{{ $job->description }}</p>
                                <small>Posted on {{ $job->created_at->format('M d, Y') }}</small>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger">
                            No results found.
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

