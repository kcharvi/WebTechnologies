<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Q11 Survey form</title>
        <style>
            .maindiv {
                background: yellow;
                width: 500px;
                height: 800px;
                position: float;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
            }
            button {
                background-color: rgb(134, 1, 1);
                color: aliceblue;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
        <div class="maindiv">
            <center><h1>Survey Form</h1></center>
            <form>
                <pre>

          Name*:  <input type="text" size="50" placeholder="Enter your Full Name" required/><br />
           
          Email*: <input
            type="text"
            size="50"
            placeholder="Enter your Email"
            required
          /><br />
           
          Age*:   <input
            type="text"
            size="50"
            placeholder="Enter your Age"
            required
          /><br />
           
          Gender: <select maxLength="50" >
            <option value="female">Select</option>
            <option value="female">female</option>
            <option value="">male</option>
            <option value="">others</option>
          </select>
           
          Programming approach: <input type="radio" id="fe" name="skills" value="front end">Front End <br> 
                                <input type="radio" id="be" name="skills">Back End <br>
                                <input type="radio" id="fs" name="skills">Full Stack<br>
          
          Your favourite Programming Language <input type="checkbox">C/C++ <br>
                                              <input type="checkbox">Pascal/Delphi<br>  
                                              <input type="checkbox">Java <br>
                                              <input type="checkbox">Python <br>          
                                              <input type="checkbox">JavaScript <br>
          Summary: <textarea cols="35" rows="5"></textarea>
           
          <input type=file name=file accept="pdf">
  
          <center><button type="submit">Submit</button></center>
            
           
  
          
        </pre>
            </form>
        </div>
    </body>
</html>
