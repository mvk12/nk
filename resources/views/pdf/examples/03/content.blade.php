<div class="page">
  <div style="width: 100% !important; display: inline-block; padding: 5px">
    <div style="width: 49%; display: inline-block; font-size: 0.8em;">
      <ul style="list-style: none;">
        <li>JUAN MIGUEL GONZALEZ</li>
        <li>AV. 5 DE MAYO 2</li>
        <li>COLONIA CENTRO, CUAUHTEMOC</li>
        <li>06000, CIUDAD DE MÉXICO</li>
      </ul>
    </div>
    <div style="width: 49%; display: inline-block; text-align: right; font-size: 0.8em; padding: 5px">
      <table style="width: 100% !important">
        <tbody>
          <tr>
            <td><b>FECHA DE CORTE</b></td>
            <td style="text-align: right;">20-FEBRERO-2021</td>
          </tr>
          <tr>
            <td><b>CUENTA</b></td>
            <td style="text-align: right;">151554545115151</td>
          </tr>
          <tr>
            <td><b>BALANCE</b></td>
            <td style="text-align: right;">${{ number_format($sum, 2) }}</td>
          </tr>
          <tr>
            <td><b>PAGAR HASTA</b></td>
            <td style="text-align: right;">1-MARZO-2021</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <table class="table-report">
    <thead>
      <tr>
        <th>FECHA</th>
        <th>DESCRIPCIÓN</th>
        <th>MONTO</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rows as $row)
      <tr>
        <td>{{ $row['date']->toFormattedDateString() }}</td>
        <td style="max-width: 500px;">{{ $row['desc'] }}</td>
        <td  style="text-align: right;">${{ number_format($row['amount'], 2) }}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th></th>
        <th>TOTAL</th>
        <th style="text-align: right;">${{ number_format($sum, 2) }}</th>
      </tr>
    </tfoot>
  </table>
</div>

<div class="page">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a risus lorem. Sed non leo nec nibh pellentesque semper. Ut lacinia a nibh et fermentum. Duis gravida vulputate lorem, vel tempor turpis semper facilisis. Nunc in mattis libero. Nulla euismod et felis eu volutpat. Integer placerat massa at elit bibendum congue. Curabitur mattis enim vel magna condimentum, ac sollicitudin lorem mattis. Quisque et augue quis erat mollis cursus. Etiam consequat lobortis augue, sed ultrices nulla iaculis vel. Fusce facilisis scelerisque velit nec ultrices. Ut placerat risus in porttitor hendrerit. Integer ut libero a ipsum facilisis blandit et sodales dolor. Duis imperdiet sit amet nibh et finibus. Etiam rutrum elit sem, vel accumsan erat imperdiet vulputate. Etiam pulvinar nisi ipsum, eu sagittis lorem finibus id.

Aenean tristique laoreet diam eu vehicula. Donec facilisis facilisis nunc vel molestie. Ut id dapibus magna, quis commodo lectus. Vestibulum eu augue tortor. Nunc ut nulla convallis lacus fermentum eleifend. Integer nec pellentesque quam. Proin eget enim sed lorem bibendum mollis. Morbi sit amet est diam.

Suspendisse tincidunt non justo sit amet sodales. Etiam ultrices commodo ultrices. Duis vulputate, risus nec tincidunt tincidunt, tortor libero consectetur lectus, quis aliquet libero odio a diam. Sed in dignissim leo. Maecenas condimentum tortor nunc, vitae rutrum lorem placerat id. Aliquam id arcu commodo, cursus nulla quis, cursus tortor. Maecenas eget lacus eget eros vulputate tempus. Duis vulputate nec felis nec pulvinar. Pellentesque faucibus accumsan augue, quis accumsan urna faucibus ut. Cras massa libero, tristique nec libero nec, venenatis vehicula erat. Nunc tristique, ipsum eget suscipit imperdiet, ligula dolor blandit risus, vitae elementum leo velit in ante.

Sed mollis euismod quam eget lobortis. Cras vel lacinia leo. Sed feugiat felis quis nisi facilisis, sit amet sodales tellus congue. Curabitur ac tortor eget justo efficitur pellentesque. Integer varius fringilla tincidunt. Suspendisse risus turpis, rhoncus sed massa nec, hendrerit porta diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam sit amet nisl in odio tincidunt feugiat at ut metus. Etiam sed fermentum velit, in sodales orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sed lobortis libero. In vitae massa vel nulla vestibulum facilisis. Aliquam erat volutpat.

Vestibulum nec gravida est, vitae viverra nunc. Aliquam dapibus augue at lectus posuere tempus. In porta ultrices nisl. Cras sit amet purus quis arcu euismod maximus vitae nec quam. Phasellus molestie turpis et purus tincidunt, eget commodo odio malesuada. Vestibulum eu sapien vitae eros mattis vehicula. Ut ullamcorper posuere turpis ultrices tempus. Donec gravida felis imperdiet ipsum scelerisque, at iaculis mauris rutrum. Praesent erat est, eleifend in ultrices sed, fermentum a lorem. Pellentesque efficitur justo enim, a ultrices dui suscipit sit amet. Phasellus vel lorem placerat, posuere odio efficitur, eleifend lectus.
</div>

<div class="page">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at purus mauris. Suspendisse potenti. Quisque nec luctus risus. Aliquam ut nisi eget leo porttitor dapibus. Fusce ac lacus ut lacus rutrum tincidunt. Fusce ac tortor eu dui imperdiet gravida. Curabitur egestas arcu ut nisl iaculis vestibulum. Ut vel risus diam. Sed efficitur turpis a tortor tempor, in rutrum nunc eleifend. Morbi a dui sed justo imperdiet aliquet ut maximus nibh. Nullam congue odio nec augue finibus, mattis ullamcorper massa pharetra. Proin felis mi, porta eu viverra in, elementum sed quam. Cras ex velit, elementum quis elit ut, venenatis auctor quam.

In luctus nec augue ut blandit. Nulla mollis sagittis lacus, eget pellentesque ligula consectetur efficitur. Maecenas volutpat tellus massa, et finibus lectus auctor vitae. Vestibulum tristique ex nunc, in laoreet ipsum efficitur id. Donec consectetur turpis id nisl dapibus congue. In hac habitasse platea dictumst. Ut erat nibh, egestas at sapien id, lobortis iaculis felis. Vestibulum consectetur aliquet nisi, vel vehicula sapien suscipit vel. Proin accumsan felis ac justo vulputate gravida. Mauris quis nisi nibh.

Vivamus vulputate egestas neque vitae mollis. Suspendisse lectus lectus, porttitor nec urna nec, suscipit tincidunt ipsum. Nulla laoreet magna vulputate luctus egestas. Aliquam viverra auctor laoreet. Fusce a urna vitae velit rutrum efficitur in quis nulla. Nullam sit amet est et est cursus pulvinar sed vel dolor. Aliquam lacus odio, interdum at est at, egestas tincidunt nisi. Nam vulputate purus velit, quis scelerisque turpis venenatis quis. Etiam cursus porta augue. Integer at leo quis eros sodales posuere et nec lectus. Vestibulum nec lacinia purus.

Vivamus eget leo quis libero porta pretium vitae id orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus molestie tincidunt est, quis sollicitudin leo interdum eget. Praesent tortor erat, pellentesque quis enim sit amet, commodo pharetra nisl. Curabitur ultrices felis a diam pellentesque, non posuere nulla hendrerit. Maecenas laoreet urna velit, at efficitur ligula condimentum imperdiet. Sed consectetur commodo eros in elementum. Fusce laoreet quam ac metus pharetra, in aliquam turpis dictum. Phasellus sit amet nulla turpis. In pharetra mi in sapien sodales euismod in ut est. Ut arcu ligula, egestas ut felis id, sollicitudin tincidunt nunc. Morbi finibus arcu at neque tincidunt, id molestie nibh suscipit. Morbi nulla elit, luctus eget nisi et, egestas tempus nunc. Mauris dolor erat, semper vitae rhoncus nec, pulvinar nec massa. Donec euismod, sem ut consectetur pretium, velit ex bibendum dolor, eu ornare sem sapien eget purus. Aenean semper diam id aliquam volutpat.

Integer interdum vitae nisl in tincidunt. Quisque vitae condimentum turpis, eget pulvinar lectus. Donec pulvinar felis in nunc varius hendrerit. Pellentesque ultrices volutpat commodo. Phasellus tempus mi diam, a facilisis erat ornare ac. Donec bibendum sed mauris in mattis. Phasellus imperdiet varius feugiat. Aenean nec auctor orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ac lacinia risus, a maximus leo.
</div>
