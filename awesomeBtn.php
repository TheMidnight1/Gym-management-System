<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .btn {
    /* Clean style */
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: none;
    background: none;
    padding: 0;
    color: var(--button-text-color);
    cursor: pointer;
    /* Clean style */
    
    --button-text-color: var(--background-color);
    --button-text-color-hover: var(--button-background-color);
    --border-color: #7D8082;
    --button-background-color: #ece8e1;
    --highlight-color: #ff4655;
    --button-inner-border-color: transparent;
    --button-bits-color: var(--background-color);
    --button-bits-color-hover: var(--button-background-color);
    
    position: relative;
    padding: 8px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 14px;
    transition: all .15s ease;
  }
  
  .btn::before,
  .btn::after {
    content: '';
    display: block;
    position: absolute;
    right: 0; left: 0;
    height: calc(50% - 5px);
    border: 1px solid var(--border-color);
    transition: all .15s ease;
  }
  
  .btn::before {
    top: 0;
    border-bottom-width: 0;
  }
  
  .btn::after {
    bottom: 0;
    border-top-width: 0;
  }
  
  .btn:active,
  .btn:focus {
    outline: none;
  }
  
  .btn:active::before,
  .btn:active::after {
    right: 3px;
    left: 3px;
  }
  
  .btn:active::before {
    top: 3px;
  }
  
  .btn:active::after {
    bottom: 3px;
  }
  
  .btn__inner {
    position: relative;
    display: block;
    padding: 20px 30px;
    background-color: var(--button-background-color);
    overflow: hidden;
    box-shadow: inset 0px 0px 0px 1px var(--button-inner-border-color);
  }
  
  .btn__inner::before {
    content: '';
    display: block;
    position: absolute;
    top: 0; left: 0;
    width: 2px;
    height: 2px;
    background-color: var(--button-bits-color);
  }
  
  .btn__inner::after {
    content: '';
    display: block;
    position: absolute;
    right: 0; bottom: 0;
    width: 4px;
    height: 4px;
    background-color: var(--button-bits-color);
    transition: all .2s ease;
  }
  
  .btn__slide {
    display: block;
    position: absolute;
    top: 0; bottom: -1px; left: -8px;
    width: 0;
    background-color: var(--highlight-color);
    transform: skew(-15deg);
    transition: all .2s ease;
  }
  
  .btn__content {
    position: relative;
  }
  
  .btn:hover {
    color: var(--button-text-color-hover);
  }
  
  .btn:hover .btn__slide {
    width: calc(100% + 15px);
  }
  
  .btn:hover .btn__inner::after {
    background-color: var(--button-bits-color-hover);
  }
  
  .btn--light {
    --button-background-color: var(--background-color);
    --button-text-color: var(--highlight-color);
    --button-inner-border-color: var(--highlight-color);
    --button-text-color-hover: #ece8e1;
    --button-bits-color-hover: #ece8e1;
  }
    </style>
</head>
<div>
    <button class="btn btn--light">
        <span class="btn__inner">
            <span class="btn__slide"></span>
            <span class="btn__content">Give me an invite Riot</span>
        </span>
    </button>
</div>
</html>

