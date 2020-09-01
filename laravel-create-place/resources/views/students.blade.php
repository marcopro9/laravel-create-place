<h1>Questa è la lista degli studenti</h1>

@foreach ($my_students as $student)
  <ul>
    <li>Nome: {{$student->nome}}</li>
    <li>Cognome: {{$student->cognome}}</li>
    <li>Descrizione: {{$student->descrizione}}</li>
    <li>Voto: {{$student->voto}}</li>
    <li>Classe: {{$student->nome_classe}}</li>
  </ul>
@endforeach
