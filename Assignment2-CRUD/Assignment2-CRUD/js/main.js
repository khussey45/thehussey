
//Global Header that adds all the links to different pages for navigation
class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<header id="header">
        <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
        </label>
        <input type="checkbox" id="check2">
      <label for="check2" class="checkbtn2">
      <i class="fa-solid fa-robot"></i>
        </label>
      <label class="title-Name">KIEREN'S AI FEST</label>
        <ul>
      
          <li><a  href="index.php">Home</a></li>
          <li><a href="add.php">Register</a></li>
          <li><a href="view.php">View Registrations</a></li>
          
        </ul>
    </nav>
    </header>`
    }
}

customElements.define('my-header', MyHeader)

//Global Footer
class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<footer id=footer>
        <p> Copyright &copy;2022 </p>
        <p>Kieren's AI</p>
        <p>Private Policy</p>

    </footer>`
    }
}

customElements.define('my-footer', MyFooter)