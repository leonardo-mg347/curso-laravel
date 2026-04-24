Título: <input type="text" name="titulo" value="{{old('titulo',$livro->titulo)}}">
Autor: <input type="text" name="autor" value="{{old('autor',$livro->autor)}}">
Isbn: <input type="text" name="isbn" class="isbn" value="{{old('isbn',$livro->isbn)}}">

<button type="submit">Enviar</button>