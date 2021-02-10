<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
</head>
<body>
  <h1>Hello World!</h1>
  <table>
    <thead>
      <tr>
          <th colspan="2">Examples of random values</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 5; $i++)
        <tr>
          <td>{{ $i }})</td>
          <td>{{ rand() }}</td>
        </tr>
      @endfor
    </tbody>
  </table>

  <h1>h1. heading</h1>
  <h2>h2. heading</h2>
  <h3>h3. heading</h3>
  <h4>h4. heading</h4>
  <h5>h5. heading</h5>
  <h6>h6. heading</h6>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo itaque quo voluptatibus ducimus saepe error ab, dolorem id tempora unde deleniti cumque molestiae labore atque, dolores inventore odio aut.</p>
  <p><i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque dolorem consequuntur architecto beatae incidunt consequatur adipisci ut eius amet necessitatibus! Ducimus tempore natus atque ea consequuntur nam omnis, maxime aperiam!</i></p>
  <p><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex necessitatibus error deserunt adipisci culpa sint eligendi sapiente, in id vero. Cupiditate voluptates asperiores reprehenderit dolorem ad assumenda nobis architecto? At.</b></p>

  <ul>
    @for ($i = 0; $i < 5; $i++)
      <li>{{ $i }} item</li>
    @endfor
  </ul>

  <ol>
    @for ($i = 0; $i < 5; $i++)
      <li>{{ $i }} item</li>
    @endfor
  </ol>

</body>
</html>