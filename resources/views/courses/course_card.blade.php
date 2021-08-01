@foreach($courses as $courses)
<div class="card-deck">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://i1.wp.com/saixiii.com/wp-content/uploads/2017/04/java-1.png?fit=898%2C436&ssl=1" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $courses->title }}</h5>
    <p class="card-text">{{ $courses->description }}</p>
    <a href="{{ route('courses.show', [$courses->id]) }}" class="btn btn-primary">Go to course</a>
  </div>
</div>
</div>
@endforeach


