
<form  action="{{route('category.store')}}" method="get">
    @csrf
    category name
    <input name="name" type="text" placeholder="enter category name"  >
     <button class="btn btn-outline-primary" type="submit">
         submit
     </button>

</form>
