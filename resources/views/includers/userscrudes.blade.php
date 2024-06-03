<div class="d-flex justify-content-start">
    <a href="{{ route('blogs.show',$blog->id) }}" class=" mr-1 btn btn-sm btn-info">show</a>
    <a href="{{ route('blogs.edit',$blog->id) }}" class=" mr-1 btn btn-sm btn-info">edit</a>
    <small>
        <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class=" btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>
    </small>
</div>
