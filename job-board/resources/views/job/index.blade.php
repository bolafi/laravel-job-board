<div>
    <h1>Hello From index</h1>
    <h3>Superviser Name: {{ $name }}</h3>
    @foreach ($data as $job)
        {{ 'Title : ' . $job['title'] . " | Salary : " . $job['salary'] . "\n"}}
    @endforeach
</div>