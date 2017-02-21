<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php intro</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div id="wrapper">
    <h1>Be honest</h1>
    <h2 class="second-header">It's your personal files...</h2>
    <form action="submitcheck.php" method="POST" name="name">
        <fieldset>
            <legend class="bold-title">Shortly about yourself</legend>
            <div>
                <p class="person">
                    <label for="name">Name:
                    <input type="text" name="name" size="30" maxlength="10" id="name"/></label>
                </p>
                <p>
                    <label for="surname">Surname: </label>
                    <input type="text" name="surname" size="30" maxlength="10" id="surname"/>
                </p>
                <p class="person">
                    <span>Sex: </span>
                    <label><input type="radio" name="sex" value="m" id="sex-m" checked/>
                    male </label>
                    <label><input type="radio" name="sex" value="f" id="sex-f">
                    female</label>
                </p>
                <p class="person">
                    <label for="age">Age:
                    <input type="text" name="age" size="6" maxlength="10" id="age"/>years</label>
                </p>
            </div>
        </fieldset>
        <fieldset>
            <legend class="bold-title">More info</legend>
            <ul>
                <li class="size-font">
                    <label><input type="radio" name="sex2" value="m  id="msex" checked/>
                   Young man</label>
                </li>
                <li class="size-font">
                    <label><input type="radio" name="sex2" value="f" id="fsex"/>
                     Girl</label>
                </li>
                <li class="size-font">
                    <label><input type="text" name="birth" size="20" maxlength="10" id="birth"/>
                     Birthdate</label>
                </li>
                <li class="size-font">
                    <label><input type="text" name="famstatus" size="20" maxlength="10" id="famstatus"/>
                    Family status</label>
                </li>
                <li class="size-font">
                    <label><input type="text" name="socstatus" size="20" maxlength="10" id="socstatus"/>
                    Social status</label>
                </li>
                <li class="size-font">
                    <label><input type="text" name="residence" size="20" maxlength="10" id="address"/>
                     Location</label>
                </li>
            </ul>
            <p class="bold-title">What are you doing on weekends?</p>
            <ul>
                <li>
                    <input type="checkbox" name="doff[]" value="sleeping" id="sleeping"/>
                    <label for="sleeping">Sleeptrip</label>
                </li>
                <li>
                    <input type="checkbox" name="doff[]" value="hanging" id="hanging"/>
                    <label for="hanging">Hanging out with fellas</label>
                </li>
                <li>
                    <input type="checkbox" name="doff[]" value="drunking" id="drunking"/>
                    <label for="drunking">Drunking</label>
                </li>
                <li>
                    <input type="checkbox" name="doff[]" value="gambling" id="gambling"/>
                    <label for="gambling">Gambling</label>
                </li>
            </ul>
            <p class="bold-title">Select the best company</p>
            <select name="bestcompany">
                <option selected>Site frequency:</option>
                <option value="google"> Google</option>
                <option value="facebook">Facebook</option>
                <option value="apple"> Apple</option>
            </select>
            <p class="bold-title">How many books have you read in your life?
            </p>
            <ul>
                <li>
                    <label>
                        <input type="radio" name="book" value="yes" id="book10" /> 0-10
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="book" value="no" id="book20"/> 11-20
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="book" value="no" id="book50"/> 21-50
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" name="book" value="no" id="book50plus"/> 50+
                    </label>
                </li>
            </ul>
            <div class="bold-title">Your comments:
            </div>
            <div>
                    <textarea name="comment" cols="50" rows="6" id="comment">
                    </textarea>
            </div>

            <p>
                <select name="selectcompany" size="3" multiple="multiple">
                    <option value="1"> Google</option>
                    <option value="2">Facebook</option>
                    <option value="3"> Apple</option>

                </select>
            </p>
        </fieldset>
        <fieldset>
            <legend class="bold-title">And finally</legend>
            <input type="text" name="name" size="35" value="This field was already filled" readonly="readonly"/>
            <p>
            <label for="email" class="boldtitle b-area">Email</label>
                <input type="name" name="mail" size="35" maxlength="10" id="email"/>
            </p>

            <p class="bold-title b-area">
                Do you wanna subscribe for best spam?
            </p>
            <ul>
                <li class="header-italic">
                    Choose category
                </li>
                <li>
                    <label for="equipment">
                        <input type="checkbox" name="spam[]" value="tool" id="equipment"/> Equipment
                    </label>
                </li>
                <li>
                    <label for="cooking">
                        <input type="checkbox" name="spam[]" value="dinner" id="cooking"/>How to cook
                    </label>
                </li>
                <li>
                    <label for="earn">
                        <input type="checkbox" name="spam[]" value="milln" id="earn"/> Earn 1 million for two days!
                    </label>
                </li>
            </ul>
            <p class="bold-title">How difficult was the task?</p>
            <ul>
                <li>
                    <label for="easy">
                        <input type="radio" name="task" value="easy" checked="checked" id="easy"/>easy
                    </label>
                </li>
                <li>
                    <label for="medium">
                        <input type="radio" name="task" value="medium" id="medium"/>So-so
                    </label>
                </li>
                <li>
                    <label for="hard">
                        <input type="radio" name="task" value="hard" id="hard"/>Extremely hard
                    </label>
                </li>
            </ul>
        </fieldset>
        <div class="indent">
            <input type="submit" name="submit" value="Send"/>
        </div>
    </form>
</div>
</body>
</html>