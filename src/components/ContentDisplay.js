import React from 'react';

const ContentDisplay = ({ content }) => {
    if (!content) {
        return <p>No content generated yet</p>;
    }

    if (content.type === 'text') {
        return <p>{content.content}</p>;
    }

    if (content.type === 'image') {
        return <img src={content.content} alt="Generated Content" />;
    }

    if (content.type === 'video') {
        return (
            <video width="320" height="240" controls>
                <source src={content.content} type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        );
    }

    return null;
};

export default ContentDisplay;
