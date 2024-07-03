#!/bin/bash

# Define the source and destination directories
SOURCE_DIR="public/public/frontend/js/chunks-165"
DEST_DIR="public/frontend/js/chunks-165"

# Log the start of the script
echo "Starting move-chunks.sh"

# Check if the source directory exists
if [ -d "$SOURCE_DIR" ]; then
    echo "Source directory $SOURCE_DIR exists."

    # Remove the destination directory if it exists
    if [ -d "$DEST_DIR" ]; then
        echo "Removing existing destination directory $DEST_DIR."
        rm -rf $DEST_DIR
    fi

    # Create the destination directory
    echo "Creating destination directory $DEST_DIR."
    mkdir -p $DEST_DIR

    # Move the chunk files
    echo "Moving files from $SOURCE_DIR to $DEST_DIR."
    mv $SOURCE_DIR/* $DEST_DIR/

    # Optionally, remove the source directory if it is empty
    if [ ! "$(ls -A $SOURCE_DIR)" ]; then
        echo "Removing empty source directory $SOURCE_DIR."
        rmdir $SOURCE_DIR
    fi

    echo "Files moved successfully."
else
    echo "Source directory $SOURCE_DIR does not exist. No files to move."
fi

# Log the end of the script
echo "Finished move-chunks.sh"
