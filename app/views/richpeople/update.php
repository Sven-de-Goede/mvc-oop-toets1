<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/RichPeople/update" method="post">
    <table>
     <tbody>
        <tr>
            <td><input type="text" name="name" id="name" value="<?= $data["row"]->name; ?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="Networth" id="Networth" value="<?= $data["row"]->Networth; ?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="Age" id="Age" value="<?= $data["row"]->Age; ?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="MyCompany" id="MyCompany" value="<?= $data["row"]->MyCompany; ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?= $data["row"]->id; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="send"></td>
        </tr>
     </tbody>
    </table>

<form action=""></form>