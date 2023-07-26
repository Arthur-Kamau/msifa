#!/bin/sh

echo ">> Building contract"

rustup target add wasm32-unknown-unknown
cargo build --all --target wasm32-unknown-unknown --release

near dev-deploy --wasmFile ./target/wasm32-unknown-unknown/release/contract.wasm --accountId sampleone.testnet 

near call dev-1687254547876-16039193712100  donate  --accountId mzalendo254.testnet  --amount 13