<div>
    <div>
        This are all the memembers

        <div>
            <table>
                <thead>
                    <tr>Name</tr>
                    <tr>EMail</tr>
                    <tr>Phone</tr>
                </thead>
                <tbody>
                @foreach ($members as $member)
                    <tr>
                    <td>{{ optional($member)->first_name }}</td> 
                    <td>{{ optional($member)->email_address }}</td>
                    <td>{{ optional($member)->mobile_no }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>