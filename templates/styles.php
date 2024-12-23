<style>
  * {
    box-sizing: border-box;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
  }

  .cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .card {
    display: flex;
    flex-direction: column;
    width: 250px;
    padding: 16px;
    border-radius: 2%;
    margin: 10px;
    -webkit-box-shadow: 10px 18px 20px 0px rgba(51, 51, 51, 0.91);
    -moz-box-shadow: 10px 18px 20px 0px rgba(51, 51, 51, 0.91);
    box-shadow: 10px 18px 20px 0px rgba(51, 51, 51, 0.91);
    transition: all 0.8s ease-in-out;
    transition-delay: 0.2s;
  }

  .card:hover {
    transform: scale(1.05);
  }

  img {
    width: 90%;
    height: auto;
    border-radius: 2%;
    background-color: white;
    align-self: center;
  }

  .card-title {
    font-size: 24px;
    margin-top: 20px;
    margin-bottom: 8px;
    font-weight: bold;
    background-color: inherit;
    color: #ffffff;
  }

  .card-stats {
    font-size: 12px;
    margin-bottom: 10px;
    background-color: inherit;
    color: rgb(170, 170, 170)
  }

  .info-btn {
    background-color: #008348;
    color: white;
    border: none;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 5px;
    align-self: flex-start;
  }

  .info-btn:hover {
    background-color: #005f2f;
  }
</style>