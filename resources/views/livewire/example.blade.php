<div class="_scrolltable">
    <table class="_tb-reservations">
        <thead>
            <tr>
                @for ($i = 1; $i < date('t'); $i++)
                    <th>
                        <div class="_txtbold7d14">{{ date('D', strtotime( date('Y-m') . '-' . $i ) ) }}</div>
                        <div class="_txtbold7d14">{{ $i }}</div>
                    </th>
                @endfor

            </tr>
        </thead>
    </table>
</div>