#include <stdio.h>

int main()
{
    int y,i,sum=0;
    scanf("%d",&y);
    if(y>0)
    {
        for(i=1;i<=y;i++)
        {
            sum=sum+i;
        }
        printf("%d",sum);
    }
    else
    {
        printf("invalid,N numbers starts from 1");
    }
    return 0;
}
