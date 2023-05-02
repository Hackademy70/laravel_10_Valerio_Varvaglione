<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Creato il</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th> {{$article->title}}</th>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->created_at->format('d/m/y')}}</td>
                    
                </tr>
            @endforeach
          
          
        </tbody>
      </table>
      
</div>
