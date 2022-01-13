<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <div>
            <table
                cellpadding="20px"
                border="5px"
                cellspacing="15px"
                style="border-color: rgb(4, 109, 4); padding: auto; text-align: center"
            >
                <tr>
                    <td>cell 11</td>
                    <td>
                        cell 12
                        <table
                            cellpadding="10px"
                            border="5px"
                            align="center"
                            style="border-color: blueviolet; text-align: center; color: red"
                        >
                            <tr>
                                <td colspan="2">cell 22</td>
                            </tr>
                            <tr>
                                <td>cell 23</td>
                                <td>cell 24</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        cell 13
                        <table
                            cellpadding="10px"
                            border="5px"
                            align="center"
                            style="border-color: pink; text-align: center; color: red"
                        >
                            <tr>
                                <td colspan="2">cell 22</td>
                            </tr>
                            <tr>
                                <td>cell 23</td>
                                <td>cell 24</td>
                            </tr>
                        </table>
                    </td>
                    <td>cell 14</td>
                </tr>
            </table>
        </div>
    </body>
</html>
