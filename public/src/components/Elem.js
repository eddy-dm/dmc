import {LitElement, html} from './../../node_modules/lit';

class Elem extends LitElement {

  render() {

    return html`

      <div>Hello from Elem!</div>

    `;

  }

}

customElements.define('my-element', Elem);