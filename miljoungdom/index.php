<!DOCTYPE html>
<html>
    <?php include 'includes/header.php'; ?>
            
        <div class="slide slide1">
            <div class="slide-row1">
                <h1>Vill du göra skillnad?</h1>
                <p>Det vill vi också! Miljöungdom samlar alla Sveriges unga miljöengagerade i en gemenskap. Tillsammans gör vi skillnad!</p>
                <button>Bli medlem</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p class="active" onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide2">
            <div class="slide-row1">
                <h1>Delta i våra aktiviteter</h1>
                <p>Vi stödjer dig som vill starta förening, organiserar studieresor och föreläsningar, fungerar som forum för miljöengagerade i hela Sverige, och mycket annat.</p>
                <button>Se våra verksamheter</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p class="active" onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide3">
            <div class="slide-row1">
                <h1>Ett förbund av föreningar</h1>
                <p>Miljöungdom är ett ungdomsförbund uppbyggt av miljöföreningar runt om i Sverige. Anslut din skolas förening, eller starta en egen!</p>
                <button>Se våra medlemsföreningar</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p class="active" onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide4">
            <div class="slide-row1">
                <h1>Gå med!</h1>
                <p>Delta i våra aktiviteter, träffa likasinnade från hela Sverige och utveckla ett handlingskraftigt hållbarhetsarbete på nationell skala. Helt gratis, såklart. Tillsammans gör vi skillnad!</p>
                <button>Bli aktiv</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p class="active" onclick="currentSlide(4)">&bullet;</p>
                <p onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>

        <div class="slide slide5">
            <div class="slide-row1">
                <h1>Engagera dig!</h1>
                <p>Miljöungdom drivs av ideellt engagemang hos medlemmarna. Var med och ta vår verksamhet till nästa nivå!</p>
                <button>Bli medlem nu</button>
            </div>

            <div class="leftArrow" onclick="slide(-1)">
                <p>&lsaquo;</p>
            </div>

            <div class="rightArrow" onclick="slide(+1)">
                <p>&rsaquo;</p>
            </div>

            <div class="slide-row2">
                <p onclick="currentSlide(1)">&bullet;</p>
                <p onclick="currentSlide(2)">&bullet;</p>
                <p onclick="currentSlide(3)">&bullet;</p>
                <p onclick="currentSlide(4)">&bullet;</p>
                <p class="active" onclick="currentSlide(5)">&bullet;</p>
            </div>
        </div>
    
    <a href="../uploads/test.pdf"> Länk till pdf </a>
    <a href="../uploads/test.docx"> Länk till word </a>

        <div class="section">
            <h2>Rubrik här</h2>
            
            <p>
            Välkommen! Om du är medlem i en miljöförening vart som helst i Sverige kan du anmäla din förening att bli del av förbundet Miljöungdom här. En medlemsförening får tillgång till allting som Miljöungdom erbjuder; en gemenskap av likasinnade, kontakter inför framtiden, tips om verksamheten, hjälp 
            med det juridiska, och inflytande över förbundet Miljöungdom.
            
            <br><br>
                
            Miljöungdom är ett förbund av föreningar. Det betyder att en enskild person inte kan gå med direkt i förbundet Miljöungdom utan bara genom att först vara medlem i en miljöförening, och sedan ansluta den föreningen till Miljöungdom.

            <br><br>
                
            Är du inte medlem i en miljöförening, och har ingen lokal miljöförening som du kan gå med i? Miljöungdom erbjuder hjälp med att starta en egen miljöförening. Tryck här för att komma till vår sida om hur du startar en egen miljöförening, det är hur enkelt som helst!
            </p>
        </div>
        
        <!-- JavaScript -->
        <script type="text/javascript" src="js/script.js"></script>
        
    <?php include 'includes/footer.php'; ?>
</html>
