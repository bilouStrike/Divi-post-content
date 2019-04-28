// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class DPCPostContent extends Component {

  static slug = 'dpc_post_content';

  render() {
    const Content = this.props.content;

    return (
      <h1>
        <Content/>
      </h1>
    );
  }
}

export default DPCPostContent;
