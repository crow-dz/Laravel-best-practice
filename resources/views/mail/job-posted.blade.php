
<h1>Hello {{ $job->employer->name }}</h1>
<p>
    Your Job is live in our website.
</p>

<p>
    <a href="{{ url('/jobs/'.$job->id) }} ">View Your Job Listing</a>
</p>