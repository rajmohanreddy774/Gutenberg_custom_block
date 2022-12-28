const { registerBlockType } = wp.blocks;
import { useBlockProps } from '@wordpress/block-editor';
import "./editor.scss";
registerBlockType("myfirstblock/guten-demo", {
  //block title that gets displayed in the admin dashboard
  title: "guten Demo Block",
  // icon can get from wordpress icons
  icon: "universal-access-alt",
  //category to which the block belongs to in editor
  category: "text",
  edit: (props) => {
    return <h1 className={"guten-demo-h1"}>First custom Blog</h1>;
  },
  save: (props) => {
    return <h1 className={"guten-demo-h1"}>Hello World!</h1>;
  },
});
