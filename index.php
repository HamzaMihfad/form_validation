<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <form action="form.php" method="POST" name="inscription" id="formvalidation" onsubmit="return formVerif()">
        <div class="inputForm">
          <label for="Nom">Nom</label>
          <input
            type="text"
            class="input"
            placeholder="first name"
            name="Nom"
            id="nom"
          />
        </div>
        <div class="inputForm">
          <label for="">Prenom</label>
          <input
            type="text"
            class="input"
            placeholder="last name"
            name="Prenom"
            id="prenom"
          />
        </div>
        <div class="inputForm">
          <label for="">CIVILITE</label>
          <select
            name="Civilite"
            style="width: 263px; height: 27px; border-radius: 3px;"
          >
            <option value="default">--- SELECT ONE ---</option>
            <option value="Mr">Mr.</option>
            <option value="Md">Md.</option>
            <option value="Mlle">Mlle.</option>
          </select>
        </div>
        <div class="inputForm">
          <label for="login">Login</label>
          <input type="text" class="input" placeholder="login" name="Login" />
        </div>
        <div class="inputForm">
          <label for="Password">Password</label>
          <input
            type="password"
            class="input"
            placeholder="Password"
            name="Password"
          />
        </div>
        <div class="inputForm">
          <label for="Password">Confirm Password</label>
          <input
            type="password"
            class="input"
            placeholder="repassword"
            name="Repassword"
          />
        </div>
        <div class="inputForm">
          <label for="Genre">Genre</label>
          <div>
            <input type="radio" name="Genre" value="H" style="width: 20px;" />
            <label for="male" style="margin-right: 90px;">Male</label>
            <input type="radio" name="Genre" value="F" style="width: 20px;" />
            <label for="female">Female</label>
          </div>
        </div>
        <div class="inputForm">
          <label for="Date">Date-Naissance</label>
          <input type="date" name="DateNaissance" />
        </div>
        <div class="inputForm">
          <label for="Email">Email</label>
          <input type="text" class="input" placeholder="exemple@gmail.com" />
        </div>
        <div class="inputForm">
          <label for="Lange">Langue</label>
          <select id="lang" name="Langue" size="3" multiple>
            <option value="AR">Arabe</option>
            <option value="FR">Francaise</option>
            <option value="EN">Anglais</option>
          </select>
        </div>
        <div
          class="inputForm"
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
          "
        >
          <label for="niveau1" style="margin: 0 110px 0 0px;">Niveau</label>
          <input
            type="radio"
            name="Niveau"
            value="B2"
            style="margin-right: 12px;"
          />
          <label for="niveau2" style="margin-right: 20px;">Bac+2</label>
          <input
            type="radio"
            name="Niveau"
            value="B3"
            style="margin-right: 12px;"
          />
          <label for="niveau3" style="margin-right: 20px;">Bac+3</label>
          <input
            type="radio"
            name="Niveau"
            value="B5"
            style="margin-right: 12px;"
          />
          <label for="niveau3" style="margin-right: 20px;">Bac+5</label>
        </div>
        <div
          class="inputForm"
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
          "
        >
          <label for="Loisirs" style="margin: 0 75px 0 90px;">Loisirs</label>
          <input
            type="checkbox"
            name="Loisir"
            value="Voiyage"
            style="margin-right: 12px;"
          />
          <label for="loisir1" style="margin-right: 20px;">Voiyage</label>
          <input
            type="checkbox"
            name="Loisir"
            value="Lecture"
            style="margin-right: 12px;"
          />
          <label for="loisir2" style="margin-right: 20px;">Lecture</label>
          <input
            type="checkbox"
            name="Loisir"
            value="Sport"
            style="margin-right: 12px;"
          />
          <label for="loisir3" style="margin-right: 20px;">Sport</label>
          <input
            type="checkbox"
            name="Loisir"
            value="Internet"
            style="margin-right: 12px;"
          />
          <label for="loisir4" style="margin-right: 20px;">Internet</label>
        </div>
        <div class="inputForm">
          <label for="Adresse">Adresse</label>
          <input
            type="text"
            class="input"
            placeholder="adresse"
            name="Adresse"
          />
        </div>
        <div class="inputForm">
          <label for="CP">CP</label>
          <input type="text" class="input" placeholder="CP" name="CP" />
        </div>
        <div class="inputForm">
          <label for="">Ville</label>
          <input type="text" class="input" placeholder="ville" name="Ville" />
        </div>
        <div class="inputForm">
          <label for="Pays">Pays</label>
          <select
            id="pays"
            name="Pays"
            style="width: 263px; height: 27px; border-radius: 3px;"
          >
            <option value="default">--- SELECT ONE ---</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="Italy">Italy</option>
            <option value="Germany">Germany</option>
            <option value="Morocco">Morocco</option>
            <option value="usa">Unated State</option>
          </select>
        </div>
        <div class="inputForm">
          <label for="Commentaire">Commentaire</label>
          <textarea
            id="w3mission"
            rows="4"
            cols="30"
            name="Commentaire"
          ></textarea>
        </div>
        <div class="inputForm">
          <label for="cv">CV</label>
          <input type="file" id="cv" name="CV" />
        </div>
        <div style="text-align: center;">
          <input type="submit" value="Envoyer" class="submit" />
        </div>
      </form>
    </div>
    <a
      href="https://typingtest.study"
      target="_blank"
      title="This is my first website"
    >

    </a>
  </body>
</html>
