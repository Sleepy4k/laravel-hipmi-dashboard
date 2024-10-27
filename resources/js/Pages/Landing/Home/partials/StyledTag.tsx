import styled from "styled-components";

const Hero = styled.div<{ banner: string }>`
  background-image: url(${props => props.banner});
`;

const CalenderIFrame = styled.iframe`
  border: solid 1px #777;
`;

export {
  Hero,
  CalenderIFrame
};
