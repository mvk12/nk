<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World with inline styles</title>
</head>
<body>
  <h1 style="color: blue; border-bottom: 1px solid blue; padding: 10px; text-align: center;">Hello World!</h1>
  <table style="width: 50%; border-collapse: collapse; border: 1px solid #AbAbAb; font-family: monospace;">
    <thead>
      <tr>
          <th colspan="2" style="color: green">Examples of random values</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 5; $i++)
        <tr>
          <td style="padding: 3px 5px; text-align: center; border: 1px solid #AbAbAb; border-bottom-color: #151515;">{{ $i }})</td>
          <td style="padding: 3px 5px; text-align: right; border: 1px solid #AbAbAb; border-bottom-color: #151515;">{{ rand() }}</td>
        </tr>
      @endfor
    </tbody>
  </table>

  <h1 style="color: blue; padding: 5px; border-left: 3px solid gray;">h1. heading</h1>
  <h2 style="color: blue; padding: 5px; border-left: 3px solid gray;">h2. heading</h2>
  <h3 style="color: blue; padding: 5px; border-left: 3px solid gray;">h3. heading</h3>
  <h4 style="color: blue; padding: 5px; border-left: 3px solid gray;">h4. heading</h4>
  <h5 style="color: blue; padding: 5px; border-left: 3px solid gray;">h5. heading</h5>
  <h6 style="color: blue; padding: 5px; border-left: 3px solid gray;">h6. heading</h6>

  <p style="font-size: 1.1em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo itaque quo voluptatibus ducimus saepe error ab, dolorem id tempora unde deleniti cumque molestiae labore atque, dolores inventore odio aut.</p>
  <p style="font-size: 0.7em;"><i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque dolorem consequuntur architecto beatae incidunt consequatur adipisci ut eius amet necessitatibus! Ducimus tempore natus atque ea consequuntur nam omnis, maxime aperiam!</i></p>
  <p style="font-size: 0.5rem;"><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex necessitatibus error deserunt adipisci culpa sint eligendi sapiente, in id vero. Cupiditate voluptates asperiores reprehenderit dolorem ad assumenda nobis architecto? At.</b></p>

  <ul style="width: 50%: display: inline-block; list-style-type: square;">
    @for ($i = 0; $i < 5; $i++)
      <li>{{ $i }} item</li>
    @endfor
  </ul>

  <ol style="width: 50%: display: inline-block; list-style-type: upper-roman;">
    @for ($i = 0; $i < 5; $i++)
      <li>{{ $i }} item</li>
    @endfor
  </ol>

</body>
</html>