import React, { Component } from 'react';
import styles from './Button.module.css'; // Import css modules stylesheet as styles
import '../Common/another-stylesheet.css'; // Import regular stylesheet

class Button extends Component {
  render() {
    // reference as a js object
    return <button className={styles.error}>Error Button</button>;
  }
}

export default Button;