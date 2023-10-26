document.addEventListener("DOMContentLoaded", () => {
    const mineButton = document.getElementById("mineButton");
    const transactionButton = document.getElementById("transactionButton");
    const chainContainer = document.getElementById("chain");
    
    // Add event listeners to buttons
    mineButton.addEventListener("click", mine);
    transactionButton.addEventListener("click", createTransaction);

    // Example blockchain data
    let lastBlockHash = "0";
    let chain = [];

    // Mine a new block
    function mine() {
        const newBlock = {
            data: "Block data",
            previousHash: lastBlockHash,
            timestamp: Date.now(),
            hash: "New block hash",
        };
        chain.push(newBlock);
        lastBlockHash = newBlock.hash;
        updateChain();
    }
    
    // Create a new transaction
    function createTransaction() {
        // Add your transaction implementation here
    }
    
    // Update the displayed blockchain data
    function updateChain() {
        const formattedChain = JSON.stringify(chain, null, 4);
        chainContainer.innerText = formattedChain;
    }
});